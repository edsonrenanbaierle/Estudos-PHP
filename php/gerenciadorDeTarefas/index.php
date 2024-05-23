<?php   

    session_start();

    if(!isset($_SESSION['tasks'])){
        $_SESSION['tasks'] = array();
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Gerenciador de Tarefas</title>
    
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Gerenciador de Tarefas</h1>
        </div>
        <div class="form">
            <form action="task.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="insert" value="insert">

                <label for="task_name">Tarefa: </label>
                <input type="text" name="task_name" placeholder="Nome da Tarefa">

                <label for="task_description">Descrição: </label>
                <input type="text" name="task_description" placeholder="Descrição da Tarefa">

                <label for="task_date">Data: </label>
                <input type="date" name="task_date">

                <label for="task_image">Imagem: </label>
                <input type="file" name="task_image">
                
                <button type="submit">Cadastrar</button>
            </form>
            <?php if(isset($_SESSION['message'])): ?>
                <p class="message"><?php echo $_SESSION['message'] ?></p>
                <?php unset($_SESSION['message']) ?>
            <?php endif; ?>
        </div>
        <div class="separator">
            
        </div>
        <div class="list-tasks">
            <?php if(isset($_SESSION['tasks'])): ?>
            <ul>
                <?php foreach ($_SESSION['tasks'] as $key => $task): ?>
                    <li>
                        <a href="details.php?key=<?php echo $key ?>"><?php echo $task['task_name'] ?></a>
                        <button class="btn-clear" type="button" onclick="deletar<?php echo $key ?>()">Remover</button>
                        <script>
                            function deletar<?php echo $key ?>(){
                                if(confirm('Confirmar remoção?')){
                                    window.location = 'http://localhost:8080/gerenciadorDeTarefas/task.php?key=<?php echo $key ?>';
                                }
                                return false;
                            }
                        </script>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
                <p class="message">Por favor ensira uma task!</p>
            <?php endif; ?>


        </div>
        <div class="footer">
            <p>Desenvolvido por Edson Baierle</p>
        </div>
    </div>
</body>
</html>