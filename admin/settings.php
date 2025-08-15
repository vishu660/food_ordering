<?php include 'includes/header.php'; ?>
<h2 class="mb-4">Site Settings</h2>
<form>
    <div class="mb-3">
        <label class="form-label">Site Name</label>
        <input type="text" class="form-control" value="Foody - Food Ordering">
    </div>
    <div class="mb-3">
        <label class="form-label">Logo</label>
        <input type="file" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Contact Email</label>
        <input type="email" class="form-control" value="support@foody.com">
    </div>
    <div class="mb-3">
        <label class="form-label">Contact Phone</label>
        <input type="text" class="form-control" value="+91 98765 43210">
    </div>
    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>
<?php include 'includes/footer.php'; ?>
