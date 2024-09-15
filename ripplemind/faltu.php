<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <p class="text-muted mb-0 mt-0"><small>Posted on ' . $formattedDate . ' by Admin</small></p>
    </li>
    <li class="list-group-item bg-light">
        <button type="button" class="btn btn-outline-info btn-smaller">
            <a href="' . htmlspecialchars($row['visit_link']) . '" target="_blank">Visit Page</a>
        </button>
    </li>
</ul>