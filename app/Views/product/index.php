<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row justify-content-md-center">
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <br />
        <br />
        <?php $no = 0; ?>
        <?php foreach ($products as $item): ?>
            <tr>
                <th scope="row"><?= $no += 1; ?></th>
                <th scope="row"><?= $item['name'] ?></th>
                <th scope="row"><?= $item['stock'] ?></th>
                <th scope="row"><?= $item['price'] ?></th>
                <th scope="row"><?= $item['category'] ?></th>
                <th scope="row">
                    <div class="btn-group" role="group " aria-label="Basic example ">
                        <div class="mx-1">
                        <a href="/product/<?= $item['id'] ?>/edit">
                        <button type="button" class="btn btn-info">
                            Edit
                        </button>
                        </a>
                        </div>
                        <div class="mx-1">
                        <form action="/product/<?= $item['id'] ?>" method="post" onsubmit="return confirm(`Are you sure?`)">
                            <input type="hidden" name="_method" value="delete" />
                            <button type="button" class="btn btn-danger">
                            Delete
                            </button>
                        </form>
                        </div>
                    </div>
                </th>
            </tr>

        <?php endforeach ?>
        </tbody>
    </table>

    <div class="col-md-auto mt-4 ">
        <td>
        <a href="/product/new">
            <button type="button" class="btn btn-primary btn-sm">Add New Product</button>
        </a>
        </td>
    </div>

    </div>
    </div>   

<?= $this->endSection() ?>