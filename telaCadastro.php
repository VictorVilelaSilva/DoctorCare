<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'conexao.php';
    include 'usuario.php';

    // Dados do novo usuário
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $ddd = $_POST['ddd'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $cep = $_POST['cep'] ?? '';
    $complemento = $_POST['complemento'] ?? '';
    $numero = $_POST['numero'] ?? '';

    // Criar um objeto usuário com os dados informados
    $usuario = new Usuario($nome, $email, $cpf, $senha, $ddd, $telefone, $cep, $complemento, $numero);

    $usuario->cadastrar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DoctorCare</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./style.css" />
</head>

<body class="">
  <nav id="navigation" class="">
    <div class="wrapper">
      <a class="logo" onclick="closeMenu()" href="index.html">
        <svg width="133" height="18" viewBox="0 0 133 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 17.088V0.287999H5.16C8.12 0.287999 10.296 1.04 11.688 2.544C13.096 4.048 13.8 6.112 13.8 8.736C13.8 11.312 13.096 13.352 11.688 14.856C10.296 16.344 8.12 17.088 5.16 17.088H0ZM2.016 15.408H5.112C6.744 15.408 8.04 15.144 9 14.616C9.976 14.072 10.672 13.304 11.088 12.312C11.504 11.304 11.712 10.112 11.712 8.736C11.712 7.328 11.504 6.12 11.088 5.112C10.672 4.104 9.976 3.328 9 2.784C8.04 2.24 6.744 1.968 5.112 1.968H2.016V15.408Z" fill="#212529"/>
          <path d="M22.4949 17.376C21.3749 17.376 20.3669 17.12 19.4709 16.608C18.5749 16.096 17.8629 15.376 17.3349 14.448C16.8229 13.504 16.5669 12.4 16.5669 11.136C16.5669 9.872 16.8309 8.776 17.3589 7.848C17.8869 6.904 18.5989 6.176 19.4949 5.664C20.4069 5.152 21.4229 4.896 22.5429 4.896C23.6629 4.896 24.6709 5.152 25.5669 5.664C26.4629 6.176 27.1669 6.904 27.6789 7.848C28.2069 8.776 28.4709 9.872 28.4709 11.136C28.4709 12.4 28.2069 13.504 27.6789 14.448C27.1509 15.376 26.4309 16.096 25.5189 16.608C24.6229 17.12 23.6149 17.376 22.4949 17.376ZM22.4949 15.648C23.1829 15.648 23.8229 15.48 24.4149 15.144C25.0069 14.808 25.4869 14.304 25.8549 13.632C26.2229 12.96 26.4069 12.128 26.4069 11.136C26.4069 10.144 26.2229 9.312 25.8549 8.64C25.5029 7.968 25.0309 7.464 24.4389 7.128C23.8469 6.792 23.2149 6.624 22.5429 6.624C21.8549 6.624 21.2149 6.792 20.6229 7.128C20.0309 7.464 19.5509 7.968 19.1829 8.64C18.8149 9.312 18.6309 10.144 18.6309 11.136C18.6309 12.128 18.8149 12.96 19.1829 13.632C19.5509 14.304 20.0229 14.808 20.5989 15.144C21.1909 15.48 21.8229 15.648 22.4949 15.648Z" fill="#212529"/>
          <path d="M37.2261 17.376C36.0901 17.376 35.0661 17.12 34.1541 16.608C33.2581 16.08 32.5461 15.352 32.0181 14.424C31.5061 13.48 31.2501 12.384 31.2501 11.136C31.2501 9.888 31.5061 8.8 32.0181 7.872C32.5461 6.928 33.2581 6.2 34.1541 5.688C35.0661 5.16 36.0901 4.896 37.2261 4.896C38.6341 4.896 39.8181 5.264 40.7781 6C41.7541 6.736 42.3701 7.72 42.6261 8.952H40.5621C40.4021 8.216 40.0101 7.648 39.3861 7.248C38.7621 6.832 38.0341 6.624 37.2021 6.624C36.5301 6.624 35.8981 6.792 35.3061 7.128C34.7141 7.464 34.2341 7.968 33.8661 8.64C33.4981 9.312 33.3141 10.144 33.3141 11.136C33.3141 12.128 33.4981 12.96 33.8661 13.632C34.2341 14.304 34.7141 14.816 35.3061 15.168C35.8981 15.504 36.5301 15.672 37.2021 15.672C38.0341 15.672 38.7621 15.472 39.3861 15.072C40.0101 14.656 40.4021 14.072 40.5621 13.32H42.6261C42.3861 14.52 41.7781 15.496 40.8021 16.248C39.8261 17 38.6341 17.376 37.2261 17.376Z" fill="#212529"/>
          <path d="M50.2974 17.088C49.2094 17.088 48.3534 16.824 47.7294 16.296C47.1054 15.768 46.7934 14.816 46.7934 13.44V6.888H44.7294V5.184H46.7934L47.0574 2.328H48.8094V5.184H52.3134V6.888H48.8094V13.44C48.8094 14.192 48.9614 14.704 49.2654 14.976C49.5694 15.232 50.1054 15.36 50.8734 15.36H52.1214V17.088H50.2974Z" fill="#212529"/>
          <path d="M60.4506 17.376C59.3306 17.376 58.3226 17.12 57.4266 16.608C56.5306 16.096 55.8186 15.376 55.2906 14.448C54.7786 13.504 54.5226 12.4 54.5226 11.136C54.5226 9.872 54.7866 8.776 55.3146 7.848C55.8426 6.904 56.5546 6.176 57.4506 5.664C58.3626 5.152 59.3786 4.896 60.4986 4.896C61.6186 4.896 62.6266 5.152 63.5226 5.664C64.4186 6.176 65.1226 6.904 65.6346 7.848C66.1626 8.776 66.4266 9.872 66.4266 11.136C66.4266 12.4 66.1626 13.504 65.6346 14.448C65.1066 15.376 64.3866 16.096 63.4746 16.608C62.5786 17.12 61.5706 17.376 60.4506 17.376ZM60.4506 15.648C61.1386 15.648 61.7786 15.48 62.3706 15.144C62.9626 14.808 63.4426 14.304 63.8106 13.632C64.1786 12.96 64.3626 12.128 64.3626 11.136C64.3626 10.144 64.1786 9.312 63.8106 8.64C63.4586 7.968 62.9866 7.464 62.3946 7.128C61.8026 6.792 61.1706 6.624 60.4986 6.624C59.8106 6.624 59.1706 6.792 58.5786 7.128C57.9866 7.464 57.5066 7.968 57.1386 8.64C56.7706 9.312 56.5866 10.144 56.5866 11.136C56.5866 12.128 56.7706 12.96 57.1386 13.632C57.5066 14.304 57.9786 14.808 58.5546 15.144C59.1466 15.48 59.7786 15.648 60.4506 15.648Z" fill="#212529"/>
          <path d="M69.7097 17.088V5.184H71.5337L71.7017 7.464C72.0697 6.68 72.6297 6.056 73.3817 5.592C74.1337 5.128 75.0617 4.896 76.1657 4.896V7.008H75.6137C74.9097 7.008 74.2617 7.136 73.6697 7.392C73.0777 7.632 72.6057 8.048 72.2537 8.64C71.9017 9.232 71.7257 10.048 71.7257 11.088V17.088H69.7097Z" fill="#212529"/>
          <path d="M86.4924 17.376C84.7964 17.376 83.3404 17.016 82.1244 16.296C80.9084 15.56 79.9724 14.544 79.3164 13.248C78.6604 11.936 78.3324 10.424 78.3324 8.712C78.3324 7 78.6604 5.488 79.3164 4.176C79.9724 2.864 80.9084 1.84 82.1244 1.104C83.3404 0.368 84.7964 0 86.4924 0C88.5084 0 90.1564 0.504 91.4364 1.512C92.7324 2.504 93.5404 3.904 93.8604 5.712H90.4764C90.2684 4.8 89.8204 4.088 89.1324 3.576C88.4604 3.048 87.5644 2.784 86.4444 2.784C84.8924 2.784 83.6764 3.312 82.7964 4.368C81.9164 5.424 81.4764 6.872 81.4764 8.712C81.4764 10.552 81.9164 12 82.7964 13.056C83.6764 14.096 84.8924 14.616 86.4444 14.616C87.5644 14.616 88.4604 14.376 89.1324 13.896C89.8204 13.4 90.2684 12.72 90.4764 11.856H93.8604C93.5404 13.584 92.7324 14.936 91.4364 15.912C90.1564 16.888 88.5084 17.376 86.4924 17.376Z" fill="#00856F"/>
          <path d="M101.092 17.376C100.068 17.376 99.2278 17.216 98.5718 16.896C97.9158 16.56 97.4277 16.12 97.1077 15.576C96.7878 15.032 96.6278 14.432 96.6278 13.776C96.6278 12.672 97.0598 11.776 97.9238 11.088C98.7878 10.4 100.084 10.056 101.812 10.056H104.836V9.768C104.836 8.952 104.604 8.352 104.14 7.968C103.676 7.584 103.1 7.392 102.412 7.392C101.788 7.392 101.244 7.544 100.78 7.848C100.316 8.136 100.028 8.568 99.9157 9.144H96.9157C96.9958 8.28 97.2837 7.528 97.7797 6.888C98.2917 6.248 98.9477 5.76 99.7477 5.424C100.548 5.072 101.444 4.896 102.436 4.896C104.132 4.896 105.468 5.32 106.444 6.168C107.42 7.016 107.908 8.216 107.908 9.768V17.088H105.292L105.004 15.168C104.652 15.808 104.156 16.336 103.516 16.752C102.892 17.168 102.084 17.376 101.092 17.376ZM101.788 14.976C102.668 14.976 103.348 14.688 103.828 14.112C104.324 13.536 104.636 12.824 104.764 11.976H102.148C101.332 11.976 100.748 12.128 100.396 12.432C100.044 12.72 99.8678 13.08 99.8678 13.512C99.8678 13.976 100.044 14.336 100.396 14.592C100.748 14.848 101.212 14.976 101.788 14.976Z" fill="#00856F"/>
          <path d="M111.319 17.088V5.184H114.055L114.343 7.416C114.775 6.648 115.359 6.04 116.095 5.592C116.847 5.128 117.727 4.896 118.735 4.896V8.136H117.871C117.199 8.136 116.599 8.24 116.071 8.448C115.543 8.656 115.127 9.016 114.823 9.528C114.535 10.04 114.391 10.752 114.391 11.664V17.088H111.319Z" fill="#00856F"/>
          <path d="M126.888 17.376C125.688 17.376 124.624 17.12 123.696 16.608C122.768 16.096 122.04 15.376 121.512 14.448C120.984 13.52 120.72 12.448 120.72 11.232C120.72 10 120.976 8.904 121.488 7.944C122.016 6.984 122.736 6.24 123.648 5.712C124.576 5.168 125.664 4.896 126.912 4.896C128.08 4.896 129.112 5.152 130.008 5.664C130.904 6.176 131.6 6.88 132.096 7.776C132.608 8.656 132.864 9.64 132.864 10.728C132.864 10.904 132.856 11.088 132.84 11.28C132.84 11.472 132.832 11.672 132.816 11.88H123.768C123.832 12.808 124.152 13.536 124.728 14.064C125.32 14.592 126.032 14.856 126.864 14.856C127.488 14.856 128.008 14.72 128.424 14.448C128.856 14.16 129.176 13.792 129.384 13.344H132.504C132.28 14.096 131.904 14.784 131.376 15.408C130.864 16.016 130.224 16.496 129.456 16.848C128.704 17.2 127.848 17.376 126.888 17.376ZM126.912 7.392C126.16 7.392 125.496 7.608 124.92 8.04C124.344 8.456 123.976 9.096 123.816 9.96H129.744C129.696 9.176 129.408 8.552 128.88 8.088C128.352 7.624 127.696 7.392 126.912 7.392Z" fill="#00856F"/>
          </svg>        
      </a>      
      <!-- <div class="menu">
        <ul>
          <li><a class="active" onclick="closeMenu()" href="#home">Início</a></li>
          <li><a onclick="closeMenu()" href="#services">Seviços</a></li>
          <li><a  onclick="closeMenu()" href="#about">Sobre</a></li>
          <li><a  onclick="closeMenu()" href="#contact">Contato</a></li>
          <li><a  onclick="closeMenu()" href="#JanelaLogin">Login</a></li>
        </ul>

        

          <a href="#contact" class="button" onclick="closeMenu()">Agende sua consulta</a>

          <ul class="social-links">
            <li>
              <a href="http://www.instagram.com" target="_blank">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 1.99997H7C4.23858 1.99997 2 4.23855 2 6.99997V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V6.99997C22 4.23855 19.7614 1.99997 17 1.99997Z" stroke="#FFFAF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M15.9997 11.3701C16.1231 12.2023 15.981 13.0523 15.5935 13.7991C15.206 14.5459 14.5929 15.1515 13.8413 15.5297C13.0898 15.908 12.2382 16.0397 11.4075 15.906C10.5768 15.7723 9.80947 15.3801 9.21455 14.7852C8.61962 14.1903 8.22744 13.4229 8.09377 12.5923C7.96011 11.7616 8.09177 10.91 8.47003 10.1584C8.84829 9.40691 9.45389 8.7938 10.2007 8.4063C10.9475 8.0188 11.7975 7.87665 12.6297 8.00006C13.4786 8.12594 14.2646 8.52152 14.8714 9.12836C15.4782 9.73521 15.8738 10.5211 15.9997 11.3701Z" stroke="#FFFAF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.5 6.49997H17.51" stroke="#FFFAF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </a>
            </li>
            <li>
              <a href="http://www.facebook.com" target="_blank">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 1.99997H15C13.6739 1.99997 12.4021 2.52675 11.4645 3.46444C10.5268 4.40212 10 5.67389 10 6.99997V9.99997H7V14H10V22H14V14H17L18 9.99997H14V6.99997C14 6.73475 14.1054 6.4804 14.2929 6.29286C14.4804 6.10533 14.7348 5.99997 15 5.99997H18V1.99997Z" stroke="#FFFAF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </a>
            </li>
            <li>
              <a href="http://www.youtube.com" target="_blank">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.5396 6.42C22.4208 5.94541 22.1789 5.51057 21.8382 5.15941C21.4976 4.80824 21.0703 4.55318 20.5996 4.42C18.8796 4 11.9996 4 11.9996 4C11.9996 4 5.1196 4 3.3996 4.46C2.92884 4.59318 2.50157 4.84824 2.16094 5.19941C1.82031 5.55057 1.57838 5.98541 1.4596 6.46C1.14481 8.20556 0.990831 9.97631 0.999595 11.75C0.988374 13.537 1.14236 15.3213 1.4596 17.08C1.59055 17.5398 1.8379 17.9581 2.17774 18.2945C2.51758 18.6308 2.93842 18.8738 3.3996 19C5.1196 19.46 11.9996 19.46 11.9996 19.46C11.9996 19.46 18.8796 19.46 20.5996 19C21.0703 18.8668 21.4976 18.6118 21.8382 18.2606C22.1789 17.9094 22.4208 17.4746 22.5396 17C22.852 15.2676 23.0059 13.5103 22.9996 11.75C23.0108 9.96295 22.8568 8.1787 22.5396 6.42Z" stroke="#FFFAF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.75 15.02L15.5 11.75L9.75 8.48001V15.02Z" stroke="#FFFAF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </a>
            </li>
          </ul>          
      </div> -->
      <!-- aria é uma propriedade para acessibilidade, podemos definir um nome e tem algumas características que os leitores de acessibilidade reconhecem e interpretam. -->  
      <button       
      aria-expanded="false" 
      aria-label="Abrir menu"
      onclick="openMenu()"
      class="open-menu"
      >
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 20H30" stroke="#00856F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M10 12H30" stroke="#00856F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M18 28L30 28" stroke="#00856F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                 
      </button>
      <button
      aria-expanded="true"
      aria-label="Fechar menu"
      onclick="closeMenu()"
      class="close-menu" 
      >
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M30 10L10 30M10 10L30 30" stroke="#FFFAF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>          
      </button>


    </div>
  </nav>

<section id="home">
  <div class="wrapper">   
    
    <div class="col-a">
      <header>
        <h4>BOAS-VINDAS A DOCTORCARE 👋</h4>
        <h1>Assistência médica simplificada para todos</h1>
      </header>
      <div class="content">
        <p>
          <!-- Os médicos da DoctorCare vão além dos sintomas para tratar a causa raiz
          de sua doença e proporcionar uma cura a longo prazo. -->
          Caso ainda não possua cadastro, este é o seu momento de fazer parte de algo especial. Não perca tempo, dê o primeiro passo e cadastre-se!
        </p>
        <!-- <a href="telaCadastro" class="button">
          Realizar Cadastro
        </a> -->
       </div>

    </div>
    <div class="col-b">
      <!-- <img src="./assets/Foto.png" alt="Mulher negra vestindo moletom verde e sorrindo" />   -->
        <div id="loginContainer">
            <h1>Cadastre-se</h1>
            <form method="POST" action="">
                <label for="nome">Nome</label>
                <input type="name" name="nome" id="nome" placeholder="Digite seu nome" autocomplete="on">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplete="on">
                <div id="labelA">
                  <label for="cpf">CPF</label>
                  <label for="senha">Senha</label>
                </div>
                <div id="labelA">
                  <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" autocomplete="on">
                  <input type="password" name="senha" id="senha" placeholder="Digite a sua senha">
                </div>
                <div id="labelA">
                  <label for="ddd" id="dddLabel">DDD</label>
                  <label for="telefone">Telefone</label>
                  <label for="cep">CEP</label>
                </div>
                <div id="labelA">
                  <input type="text" name="ddd" id="ddd" placeholder="DDD" autocomplete="on">
                  <input type="phone" name="telefone" id="telefone" placeholder="Digite o nº de telefone" autocomplete="on">
                  <input type="text" name="cep" id="cep" placeholder="Digite o CEP">
                </div>
                <div id="labelA">
                  <label for="complemento">Complemento</label>
                  <label for="numero" id="numeroLabel">Número</label>
                </div>
                <div id="labelA">
                  <input type="text" name="complemento" id="complemento" placeholder="Digite o complemento do end." autocomplete="on">
                  <input type="text" name="numero" id="numero" placeholder="Nº">
                </div>
                <!-- <input type="submit" value="Login"> -->
                <!-- <a href="#" class="button" id="loginButton">Cadastrar</a> -->
                <button type="submit" class="button" id="loginButton">Cadastrar</button>
            </form>
        </div>

    </div>
            
    <div class="stats">
      <div class="stat">
            <h3>+3.500</h3>
            <p>Pacientes atendidos</p>
        </div>
        <div class="stat">
          <h3>+15</h3>
          <p>Especialistas disponíveis</p>
      </div>
      <div class="stat">
        <h3>+10</h3>
        <p>Anos no mercado</p>
      </div>
  </div>


  </div>

</section>


<script src="https://unpkg.com/scrollreveal"></script> <!-- Biblioteca do scrollreveal -->
  <script src="./main.js"></script>
</body>

</html>