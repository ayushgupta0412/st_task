<h1>Edit Product</h1>
<dir align="right"> <?= $this->Html->link('Back',array('action'=>'index'));?> </dir>
<!-- Form Starts -->
<?= $this->Form->create($product, ['id'=>'editProductForm', 'enctype' => 'multipart/form-data']); ?>
  <div class="form-group">
    <?= $this->Form->input('product_name', ['class'=>'form-control', 'placeholder'=>'Enter name']); ?>
  </div>
  <div class="form-group">
    <label for="parent_id">Categories</label><br>
    <?= $this->Form->select('categories_id', $categoryList, ['empty' => '--Categories--']); ?>
  </div>
  <div class="form-group">
    <label for="parent_id">Description</label><br>
    <?= $this->Form->textarea('product_description', ['rows' => '5', 'cols' => '5','class'=>'form-control', 'placeholder'=>'Enter name']); ?>
  </div>
  <div class="form-group">
    <?= $this->Form->control('product_image', ["type"=>"file","id"=>"file", 'name'=>"product_image", "multiple"=>false]); ?>
  </div>
  <?= $this->Form->button('Edit', ['type'=> 'submit', 'class' => 'btn btn-primary']) ?>
<?= $this->Form->end(); ?>
<!-- Form Starts -->