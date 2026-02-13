<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách danh mục</title>

    <style>
    body {
        margin: 0;
        padding: 0;
        background: linear-gradient(135deg, #eef2ff, #f8f9ff);
        font-family: "Segoe UI", Arial, sans-serif;
    }

    .container {
        width: 92%;
        max-width: 1150px;
        margin: 50px auto;
    }

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .page-header h2 {
        margin: 0;
        font-weight: 600;
        color: #2c3e50;
        letter-spacing: 0.5px;
    }

    .btn {
        padding: 9px 16px;
        border-radius: 8px;
        font-size: 14px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: all 0.25s ease;
        font-weight: 500;
    }

    .btn-primary {
        background: #4f46e5;
        color: white;
    }

    .btn-primary:hover {
        background: #4338ca;
    }

    .btn-edit {
        background: #10b981;
        color: white;
    }

    .btn-edit:hover {
        background: #059669;
    }

    .btn-delete {
        background: #ef4444;
        color: white;
    }

    .btn-delete:hover {
        background: #dc2626;
    }

    .card {
        background: white;
        border-radius: 14px;
        padding: 25px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.06);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background: #f3f4f6;
    }

    th {
        text-align: left;
        padding: 14px;
        font-weight: 600;
        color: #374151;
        font-size: 14px;
        border-bottom: 2px solid #e5e7eb;
    }

    td {
        padding: 14px;
        border-bottom: 1px solid #f1f1f1;
        color: #4b5563;
        font-size: 14px;
    }

    tr:hover {
        background: #f9fafb;
    }

    .actions {
        display: flex;
        gap: 10px;
    }

    .alert-success {
        background: #ecfdf5;
        color: #065f46;
        padding: 14px;
        border-radius: 8px;
        margin-bottom: 25px;
        border-left: 4px solid #10b981;
    }

    .empty {
        text-align: center;
        padding: 40px;
        color: #6b7280;
        font-size: 15px;
    }

    .child-category {
        padding-left: 22px;
        position: relative;
    }

    .child-category::before {
        content: "";
        position: absolute;
        left: 8px;
        top: 50%;
        width: 8px;
        height: 1px;
        background: #9ca3af;
    }
</style>

</head>

<body>

<div class="container">

    <div class="page-header">
        <h2>Danh sách danh mục</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            Thêm mới
        </a>
    </div>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">

        @if($categories->isEmpty())
            <div class="empty">
                Chưa có danh mục nào.
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th style="width:60px;">ID</th>
                        <th>Tên danh mục</th>
                        <th>Danh mục cha</th>
                        <th style="width:180px;">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $item)
                        <tr>
                            <td>{{ $item->id }}</td>

                            <td class="{{ $item->parent_id ? 'child-category' : '' }}">
                                {{ $item->name }}
                            </td>

                            <td>
                                {{ $item->parent?->name ?? '—' }}
                            </td>

                            <td>
                                <div class="actions">
                                    <a href="{{ route('categories.edit', $item->id) }}"
                                       class="btn btn-edit">
                                        Sửa
                                    </a>

                                    <form action="{{ route('categories.destroy', $item->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Bạn có chắc muốn xóa danh mục này?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete">
                                            Xóa
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

    </div>

</div>

</body>
</html>
