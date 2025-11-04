<?php
    echo "<h2>Entre em Contato Conosco</h2>";
    echo "<p>Valorizamos a comunicação e estamos prontos para ouvir suas dúvidas, sugestões ou propostas de parceria. Escolha a forma de contato que for mais conveniente para você:</p>";
    
    echo "<h3>Informações de Contato</h3>";
    echo "<ul>
            <li><strong>E-mail:</strong> contato@techsolutions.com.br</li>
            <li><strong>Telefone:</strong> (83) 5555-1234 (Segunda a Sexta, 9h às 18h)</li>
            <li><strong>Endereço:</strong> Av. Principal, 1234, Centro - João Pessoa/PB</li>
          </ul>";

    echo "<h3>Mande sua Mensagem</h3>";
    
    echo '<form action="#" method="post" style="max-width: 400px;">
            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="email">Seu E-mail:</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required rows="6" style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;"></textarea>

            <input type="submit" value="Enviar Mensagem" style="background-color: #007bff; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer;">
          </form>';

    echo "<p style='margin-top: 30px;'>Aguardamos seu contato! Responderemos o mais breve possível.</p>";
?>