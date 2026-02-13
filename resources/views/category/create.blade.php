@extends('layouts.app')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #eef2ff, #f8f9ff);
        font-family: "Segoe UI", Arial, sans-serif;
    }

    .container {
        width: 92%;
        max-width: 800px;
        margin: 50px auto;
    }

    .card {
        background: white;
        border-radius: 14px;
        padding: 30px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.06);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 500;
        color: #374151;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px 12px;
        border-radius: 8px;
        border: 1px solid #d1d5db;
        font-size: 14px;
    }

    textarea {
        min-height: 100px;
        resize: vertical;
    }

    .btn {
        padding: 10px 18px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        transition: 0.25s ease;
    }

    .btn-primary {
        background: #4f46e5;
        color: white;
    }

    .btn-primary:hover {
        background: #4338ca;
    }

    .btn-secondary {
        background: #e5e7eb;
        color: #374151;
        text-decoration: none;
    }

    .tree-box {
        border: 1px solid #d1d5db;
        border-radius: 8px;
        padding: 10px;
        max-height: 300px;
        overflow-y: auto;
        background: #f9fafb;
    }

    .tree-level {
        list-style: none;
        padding-left: 20px;
    }

    .tree-node {
        padding: 6px 10px;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.2s;
        margin: 3px 0;
    }

    .tree-node:hover {
        background: #e0e7ff;
    }

    .tree-node.selected {
        background: #4f46e5;
        color: white;
    }

    .field-error {
        color: #dc2626;
        font-size: 13px;
        margin-top: 5px;
    }
</style>

<div class="container">

    <div class="card">

        <h2>Thêm danh mục</h2>

        @if ($errors->any())
            <div class="field-error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="description">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label>Danh mục cha</label>

                <input type="hidden" name="parent_id" id="parent_id"
                       value="{{ old('parent_id') }}">

                <div class="tree-box">

@include('category.partials.tree', [
    'categories' => $tree,
    'level' => 0,
    'selected' => old('parent_id'),
    'currentId' => null
])

                </div>

                @error('parent_id')
                    <div class="field-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <br>

            <button type="submit" class="btn btn-primary">
                Lưu danh mục
            </button>

            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                Quay lại
            </a>

        </form>

    </div>
</div>

<script>
    function selectParent(id, element) {
        document.getElementById('parent_id').value = id;

        document.querySelectorAll('.tree-node')
            .forEach(el => el.classList.remove('selected'));

        element.classList.add('selected');
    }
</script>

@endsection
