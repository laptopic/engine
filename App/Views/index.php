
<ul>
    <?php foreach($result as $value) :?>
    <li><?php echo $value['email'] ?></li>
    <?php endforeach;?>
</ul>

<?php dd($result)?>