<h1>Settings</h1>


<form method="post">


<?php wp_nonce_field('name_of_my_action', 'name_of_nonce_field'); ?>


<table class="form-table" role="presentation">
    <tbody>
    <tr>
        <th scope="row"><label for="myname">My Name</label></th>
        <td>
            <input name="myname" type="text" id="myname" value="<?php echo get_option('myname');?>" class="regular-text" autocomplete="off">
        </td>
    </tr>

    <tr>
        <th scope="row"><label for="myaddress">My Address</label></th>
        <td>
            <input name="myaddress" type="text" id="myaddress" value="<?php echo get_option('myaddress');?>" class="regular-text" autocomplete="off">
        </td>
    </tr>

    <tr>
        <th scope="row"><label for="mobile_no">My Mobile</label></th>
        <td>
            <input name="mobile_no" type="text" id="mobile_no" value="<?php echo get_option('mobile_no');?>" class="regular-text" autocomplete="off">
        </td>
    </tr>

    </tbody>
</table>


<?php submit_button();?>

</form>