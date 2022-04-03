<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="card text-white bg-dark mb-3" style="width: 18rem;">
            <div class="card-body">
    <form action="/product/create" method="post">
        <label for="name">Product Name</label>
        <br />
        <input type="text" id="name" placeholder="Input product name" name="name" />
        
        <br />
        <br />
        <label for="stock">Stock</label>
        <br />
        <input type="number" min="1" id="stock" placeholder="Input product stock" name="stock" />

        <br /> 
        <br />
        <label for="price">Price</label>
        <br />
        <input type="number" min="0" id="price" placeholder="Input product price" name="price" />

        <br />
        <br />
        <label for="category">Category</label>
        <br />
        <select name="category" id="category">
            <option value="utilities">Utilities</option>
            <option value="food_and_beverages">Food & Beverages</option>
            <option value="books">Books</option>
        </select>
        

        <br />
        <br />
        <div class="container">
        <div class="row justify-content-md-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
    </div>
</div>
</div>
</div>
<?= $this->endSection() ?>