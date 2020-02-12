<h1>Settings</h1>


<form method="post">


<?php wp_nonce_field('name_of_my_action', 'name_of_nonce_field'); ?>


<table class="form-table" role="presentation">
    <tbody>
    <tr>
        <th scope="row"><label for="blogname">Site Title</label></th>
        <td>
            <input name="blogname" type="text" id="blogname" value="Sabu" class="regular-text" autocomplete="off">
        </td>
    </tr>

    </tbody>
</table>


<?php submit_button();?>

</form>