<template>
    <div>
        <h2>Articles</h2>
    </div>
</template>

<script>
export default {
    data() {
        return {
            articles: [],
            article:{
                id: '',
                title: '',
                bodt: ''
            }, 
            article_id: '',
            pagination: {},
            edit: false        
        }
    },

    created() { 
        this.fetchArticles(); // When it loads we want to run a method called fetch articles
    },

    // Tips : un objet à l'intérieur d'un tableau s'appel une data

    methods: {
        fetchArticles() {
            fetch('api/articles')
            .then(res => res.json())
            .then(res => {
                console.log(res.data);

            });
        }
    }
}

</script>