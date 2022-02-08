vm = new Vue({
    el: '#app',
    data: {
        lang: null,
        langSpinner: false
    },
    methods: {
        // Получение жсон данных
        json(lang) {
            var jsonTemp = null;
            $.ajax({
                'async': false,
                'url': "https://leksii.art/lang/"+lang+".json",
                'success': function (data) {
                    jsonTemp = data;
                }
            });
            return jsonTemp;
        }, 

        //Вывести текст относительно жсон ключа
        langKey(key){
            return lang[key];
        },

        //Установка языка
        setLang(lang){
            localStorage.setItem("leksii_lang",lang);
            this.langSpinner = true;
            this.checkLang();
            this.$forceUpdate();
            setTimeout(this.reset,300);
        },
        
        // Перезапуск и отключение спиннера
        reset(){
            this.langSpinner = false;
            for(let field in this.formData){
                this.formData[field] = null;
            }
        },

        // Проверка локального хранилища на наличие ключа "язык"
        checkLang(){
           if(localStorage.getItem("leksii_lang")){
               self.lang = this.json(localStorage.getItem("leksii_lang"));
           }else{
               localStorage.setItem("leksii_lang","ua");
               self.lang = this.json(localStorage.getItem("leksii_lang"));
           }
        },
    },
    beforeMount(){
        this.checkLang()
    }
})

