<?foreach ($categories as $category):?>
    <h4><?=$category->title?></h4>
    <?foreach ($category->products as $product):?>
        <p><?=$product->title?> | $<?=$product->price?></p>
    <?endforeach;?>
    <hr>
<?endforeach;?>
