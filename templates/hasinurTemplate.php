<h1>Hasinur</h1>


<form method="post">


<?php wp_nonce_field('hasinur_action', 'hasinur_nonce_field'); ?>


<table class="form-table" role="presentation">
    <tbody>
    <tr>
        <th scope="row"><label for="blogname">Your Name</label></th>
        <td>
            <input name="name" type="text" id="name" value="Hasinur" class="regular-text" autocomplete="off">
        </td>
    </tr>

    <tr>
        <th scope="row"><label for="blogname">Country Name</label></th>
        <td>
            <input name="country_name" type="text" id="country_name" value="Bangladesh" class="regular-text" autocomplete="off">
        </td>
    </tr>

    </tbody>
</table>


<?php submit_button();?>

</form>