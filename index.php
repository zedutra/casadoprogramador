<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Casa do Programador</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilo CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=VT323&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Menu -->
    <?php include "includes/menu.php"; ?>
    
    <!-- Topicos -->
    <main>
        <div class="d-flex justify-content-around mt-4">
            <div class="w-60 center">
                <button class="btn btn-white rounded">Últimos posts</button>
                <button class="btn btn-white rounded">Mais populares</button>
            </div>
            <div class="w-33 align-self-center">
                <button class="btn btn-black rounded">Discussão</button>
            </div>
        </div>
        <table class="mt-4 m-auto" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th class=""></th>
                    <th class="">Tópico</th>
                    <th class="">Atividade</th>
                    <th class="">Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><div class="profile-picture"></div></td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium dui massa, eu blandit magna mattis non. Vestibulum sit amet cursus nulla.</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="thumbs-up-sharp" class="icon-text like-button"></ion-icon><span>10</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="chatbox-sharp" class="icon-text"></ion-icon><span>5</span>
                        </div>
                    </td>
                    <td>Ontem</td>
                </tr>
                <tr>
                    <td><div class="profile-picture"></div></td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium dui massa, eu blandit magna mattis non. Vestibulum sit amet cursus nulla.</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="thumbs-up-sharp" class="icon-text like-button"></ion-icon><span>10</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="chatbox-sharp" class="icon-text"></ion-icon><span>5</span>
                        </div>
                    </td>
                    <td>Ontem</td>
                </tr>
                <tr>
                    <td><div class="profile-picture"></div></td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium dui massa, eu blandit magna mattis non. Vestibulum sit amet cursus nulla.</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="thumbs-up-sharp" class="icon-text like-button"></ion-icon><span>10</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="chatbox-sharp" class="icon-text"></ion-icon><span>5</span>
                        </div>
                    </td>
                    <td>Ontem</td>
                </tr>
                <tr>
                    <td><div class="profile-picture"></div></td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium dui massa, eu blandit magna mattis non. Vestibulum sit amet cursus nulla.</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="thumbs-up-sharp" class="icon-text like-button"></ion-icon><span>10</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="chatbox-sharp" class="icon-text"></ion-icon><span>5</span>
                        </div>
                    </td>
                    <td>Ontem</td>
                </tr>
                <tr>
                    <td><div class="profile-picture"></div></td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium dui massa, eu blandit magna mattis non. Vestibulum sit amet cursus nulla.</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="thumbs-up-sharp" class="icon-text like-button"></ion-icon><span>10</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="chatbox-sharp" class="icon-text"></ion-icon><span>5</span>
                        </div>
                    </td>
                    <td>Ontem</td>
                </tr>
                <tr>
                    <td><div class="profile-picture"></div></td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium dui massa, eu blandit magna mattis non. Vestibulum sit amet cursus nulla.</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="thumbs-up-sharp" class="icon-text like-button"></ion-icon><span>10</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <ion-icon name="chatbox-sharp" class="icon-text"></ion-icon><span>5</span>
                        </div>
                    </td>
                    <td>Ontem</td>
                </tr>
                
            </tbody>
        </table>
    </main>
    <!-- /Topicos -->

    <!-- Ion Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <!-- botao like -->
    <script>
        document.querySelectorAll('.like-button').forEach(button => {
            button.addEventListener('click', function() {
                const likeCount = this.nextElementSibling;
                let currentLikes = parseInt(likeCount.textContent);
                
                if (this.classList.contains('liked')) {
                    // Se já foi clicado (like removido)
                    likeCount.textContent = currentLikes - 1;
                    this.style.color = 'black';
                } else {
                    // Se for clicado (like adicionado)
                    likeCount.textContent = currentLikes + 1;
                    this.style.color = 'red';
                }

                // Alterna a classe 'liked'
                this.classList.toggle('liked');
                
                // Efeito de pulsação
                this.classList.add('pulsate');
                setTimeout(() => {
                    this.classList.remove('pulsate');
                }, 300);
            });
        });
    </script>
</body>
</html>
