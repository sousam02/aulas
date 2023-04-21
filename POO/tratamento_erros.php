<?php

try {
    echo "<h3> ** Try **";

    // $sql = "SELECT * FROM clientes";
    // mysql_query($sql);

    if (!file_exists("require_arquivo_a.php")) {
        throw new Exception('O arquivo em questão deveria estar disponível às ' . date('d/m/Y - h:i') . ' horas, mas nao estava. Vamos seguir mesmo assim');
    }
} catch (Error $e) {
    echo "<h3> ** Catch error **";

    echo '<p style="color: red">' . $e . '</p>';
} catch (Exception $e) {
    echo "<h3> ** Catch Exception **";

    echo '<p style="color: red">' . $e . '</p>';
}
