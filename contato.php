<?php
if (isset($_POST['submit'])) {

    // Variáveis do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Destinatário e assunto do e-mail
    $para = "ca@camposeaggio.com.br";
    $assunto = "Mensagem do formulário de contato do SITE";

    // Corpo do e-mail
    $corpo = "Nome: " . $nome . "\n" .
        "E-mail: " . $email . "\n" .
        "Mensagem: " . $mensagem;

    // Cabeçalhos do e-mail
    $cabecalhos = "From: siteFRANCESPACE@example.com" . "\r\n" .
        "Reply-To: " . $email . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Enviar o e-mail
    if (mail($para, $assunto, $corpo, $cabecalhos)) {
        echo '
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        <div class="modal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Email Enviado com Sucesso</h5>
            </div>
            <div class="modal-body">
              <p>Obrigado'.$nome.' Pelo contato, Aguarde o Retorno</p>
            </div>
            <div class="modal-footer">
              <a href="index.html" class="btn btn-primary">Retornar ao Site</a>
            </div>
          </div>
        </div>
      </div>
';
echo "Certo";
    } else {
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        <div class="modal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">E-mail não enviado</h5>
            </div>
            <div class="modal-body">
              <p>Seu email não foi enviado, confira se está tudo correto! Ou aguarde o suporte</p>
            </div>
            <div class="modal-footer">
              <a href="index.html" class="btn btn-primary">Retornar ao Site</a>
            </div>
          </div>
        </div>
      </div>';
      
    }
}else{
  echo "Error";
}