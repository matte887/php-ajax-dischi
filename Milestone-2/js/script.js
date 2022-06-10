const app = new Vue({
    el: "#root",
    data: {
        discs: [],
        genresArray: []
    },
    methods: {
        generateArrayGenres() {
            this.discs.forEach(element => {
                if (!this.genresArray.includes(element.genre)) {
                    this.genresArray.push(element.genre);
                }
            });
        }
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