<div class="col-xs-12">
    <h2>Tables List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Table Name</th>
            </tr>
        </thead>
        <?php foreach ($this->tables as $value):?>
        <tr>
            <td><?=$value[0];?></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>

