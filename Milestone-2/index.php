<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <!-- My style -->
    <link rel="stylesheet" href="../common-files/css/style.css">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
    <header>
        <img src="../common-files/img/spotify.png" alt="">
    </header>
    <main id="root">
        <div class="container">
            <form class="pt-4">
                <label for="selectGenre" class="me-1">Filtra per genere musicale</label>
                <select class="me-5" name="selectGenre" id="selectGenre" v-model="genreSelection" @change="">
                    <option value=""></option>
                    <option v-for="(item, index) in genresArray" :key="index" :value="item">{{item}}</option>
                </select>

                <label for="selectArtist" class="me-3">Filtra per artista</label>
                <select name="selectArtist" id="selectArtist" v-model="artistSelection" @change="">
                    <option value=""></option>
                    <option v-for="(item, index) in discs" :key="index" :value="item.author">{{item.author}}</option>
                </select>
            </form>
            <div class="row row-cols-2 row-cols-md-3 g-5 my-5">
                <div class="col" v-for="thisDisc in discs">
                    <div class="my-card text-center py-4">
                        <img :src="thisDisc.poster" :alt="thisDisc.title" />
                        <h3 class="py-3 text-uppercase">{{thisDisc.title}}</h3>
                        <span class="text-secondary">{{thisDisc.author}}</span>
                        <span class="text-secondary">{{thisDisc.year}}</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="./js/script.js"></script>
</body>

</html>