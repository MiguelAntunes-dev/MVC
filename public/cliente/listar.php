<a href="/mvc20251/cliente/formulario">Cadastrar</a>"
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Peso</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Desafio</th>
    </tr>
<?php
foreach ($parametro as $p) {
    ?>
     <tr>
     <td><?= $p['id'] ?></td>
     <td><?= $p['nome'] ?> </td>
     <td><?= $p['idade'] ?> </td>
     <td><?= $p['peso'] ?> </td>
     <td><?= $p['telefone'] ?></td>
     <td><?= $p['email'] ?> </td>
     <td><?= $p['desafio'] ?></td>
     <td><a href='/mvc20251/cliente/formularioalterar?id=<?= $p['id'] ?>'>Alterar</a></td>
     </tr>
    <?php
}
?>
</table>