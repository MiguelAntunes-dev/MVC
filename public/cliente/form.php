<form method = "POST" action ="/mvc20251/cliente/inserir">
    <label>Nome: </label>
    <input type="text" name="nome" value="<?= ($parametro != null) ? $parametro[0]['nome'] : "" ?>"     >
    <br>
    <label>Desafio: </label>
    <input type="text" name="desafio" value="<?= ($parametro != null) ? $parametro[0]['desafio'] : "" ?>"     >
    <br>
    <?php
    if ($parametro != null) {
        ?>
        <input type="hidden" name="id" value="<?= $parametro[0]['id'] ?>">
        <?php
        }
        ?>
        <input type="submit" value="enviar">
    }
</form>