{{-- resources/views/components/datatable/action-dropdown.blade.php --}}
<span class="dropdown">
    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">
        Actions
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <a class="dropdown-item" href="">
            Edit
        </a>
        <form action="" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item text-danger"
                    onclick="return confirm('Are you sure you want to delete this category?')">
                Delete
            </button>
        </form>
    </div>
</span>
