<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // ========================
    // Danh sách
    // ========================
    public function index()
    {
        $categories = Category::active()
                              ->with('parent')
                              ->get();

        return view('category.index', compact('categories'));
    }

    // ========================
    // Form thêm
    // ========================
    public function create()
{
    $tree = Category::whereNull('parent_id')
        ->where('is_delete', 0)
        ->with('children')
        ->get();

    return view('category.create', compact('tree'));
}


    // ========================
    // Lưu dữ liệu (CREATE)
    // ========================
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        // ⚠️ CREATE không cần check loop
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
            'is_delete' => 0
        ]);

        return redirect()->route('categories.index')
                         ->with('success', 'Thêm danh mục thành công');
    }

    // ========================
    // Form sửa
    // ========================
    public function edit(Category $category)
{
    $tree = Category::whereNull('parent_id')
        ->where('is_delete', 0)
        ->with('children')
        ->get();

    return view('category.edit', compact('category', 'tree'));
}


    // ========================
    // Cập nhật (UPDATE)
    // ========================
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        $category = Category::findOrFail($id);

        // ❌ Không cho tự làm cha
        if ($request->parent_id == $id) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['parent_id' => 'Không được chọn chính nó làm danh mục cha']);
        }

        // ❌ Không cho tạo vòng lặp
        if ($this->checkLoop($request->parent_id, $id)) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['parent_id' => 'Không được tạo vòng lặp danh mục']);
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'parent_id' => $request->parent_id
        ]);

        return redirect()->route('categories.index')
                         ->with('success', 'Cập nhật thành công');
    }

    // ========================
    // Xóa mềm
    // ========================
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'is_delete' => 1
        ]);

        return redirect()->route('categories.index')
                         ->with('success', 'Xóa danh mục thành công');
    }

    // ========================
    // Kiểm tra vòng lặp
    // ========================
    private function checkLoop($parentId, $id)
    {
        while ($parentId != null) {

            if ($parentId == $id) {
                return true; // Có vòng lặp
            }

            $parent = Category::find($parentId);

            if (!$parent) {
                break;
            }

            $parentId = $parent->parent_id;
        }

        return false; // Không có vòng lặp
    }
}
