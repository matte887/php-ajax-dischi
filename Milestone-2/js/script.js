const app = new Vue({
    el: "#root",
    data: {
        discs: [],
        genresArray: [],
        genreSelected: "",
        thisGenre: [],
    },
    methods: {
        generateArrayGenres() {
            this.discs.forEach(element => {
                if (!this.genresArray.includes(element.genre)) {
                    this.genresArray.push(element.genre);
                }
            });
        },
        filterByGenres() {
            axios
            .get("http://localhost/php-ajax-dischi/Milestone-2/api/server.php", {
                params: {
                    genre: this.genreSelected
                }
            })
            .then((resp) => {
                this.discs = [];
                resp.data.forEach(element => {
                    if (this.genreSelected === element.genre) {
                        this.discs.push(element);
                    }
                })
                console.log(this.discs);
            });
        },
    },
    created() {
        axios
            .get("http://localhost/php-ajax-dischi/Milestone-2/api/server.php")
            .then((resp) => {
                this.discs = resp.data;
                this.generateArrayGenres();
            });
    }
});