@extends('admin.layouts.admin')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="holder">
    <form class="form-horizontal">
    <fieldset>

    <!-- Form Name -->
    <legend>ADD PRODUCTS TO STOCK</legend>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>  
    <div class="col-md-4">
    <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
    <div class="col-md-4">
    <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
    <div class="col-md-4">
    <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">PRICE</label>  
    <div class="col-md-4">
    <input id="price" name="price" placeholder="PRICE" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="product_weight">PRODUCT WEIGHT</label>  
    <div class="col-md-4">
    <input id="product_weight" name="product_weight" placeholder="PRODUCT WEIGHT" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
    <div class="col-md-4">                     
        <textarea class="form-control" id="product_description" name="product_description"></textarea>
    </div>
    </div>

    <!-- File Button --> 
    <div class="form-group">
    <label class="col-md-4 control-label" for="filebutton">Main image</label>
    <div class="col-md-4">
        <input id="filebutton" name="filebutton" class="input-file" type="file">
    </div>
    </div>
    <!-- File Button --> 
    <div class="form-group">
    <label class="col-md-4 control-label" for="filebutton">Ekstra images</label>
    <div class="col-md-4">
        <input id="filebutton" name="filebutton" class="input-file" type="file">
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Add product</button>
    </div>
    </div>

    </fieldset>
    </form>
</div>