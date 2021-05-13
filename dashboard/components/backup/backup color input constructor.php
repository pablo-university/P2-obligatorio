<select class="form-select form-select-md mb-3" name="color" aria-label=".form-select-lg example">
                <option selected disabled>Color</option>
                <?php while ($data = $res_colors->fetch_object()) { ?>
                    <option value="<?= $data->color ?>"><?= $data->color ?></option>
                <?php } ?>
            </select>