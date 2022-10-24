vm = new Vue({
    el: '#app',
    data: {
        monobankCurrency: null,
        jsonData: null,
        lang: null,
        langSpinner: false,
        monoLoaded: false
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

        json_data(){
            var jsonDataTemp = null;
            $.ajax({
                'async': false,
                'url': "https://leksii.art/json/data.json",
                'success': function (data) {
                    jsonDataTemp = data;
                }
            });
            return jsonDataTemp;
        },

        monoCurrency(){
            setTimeout(function(){
                $.ajax({
                    'async': true,
                    'url': "https://api.monobank.ua/bank/currency",
                    'success': function (data) {
                        this.monobankCurrency = data
                        console.log("Done! 200 OK for Mono API\nUAH: "+this.monobankCurrency[0]["rateSell"])
                    }
                });
            }, 300)
        },

        getMono(){
            if (this.monobankCurrency){
                return this.monobankCurrency[0]["rateSell"];
            }
        },

        //Вывести текст относительно жсон ключа
        langKey(key){
            return lang[key];
        },

        dataKey(key){
            if (jsonData){
                return jsonData[key];
            }else{
                console.log("No jsonData found!")
                return "null";
            }
        },

        //Установка языка
        setLang(lang){
            localStorage.setItem("leksii_lang",lang);
            this.langSpinner = true;
            this.checkLang();
            this.$forceUpdate();
            setTimeout(this.reset,400);
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
        checkMono(){
            if (!this.monoLoaded){
                this.monoCurrency();
            }else{
                console.log("Mono already known: "+this.monoCurrency())
            }
        }
    },
    beforeMount(){
        //this.checkMono();
        jsonData = this.json_data();
        this.checkLang();
    }
})

