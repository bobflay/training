<!DOCTYPE html>
<html>
<head>
    <title>title is set by hassan houry</title>

    <style type="text/css">
        .color-red{
            color: red;
        }

        .color-blue{
            color: blue;
        }

        .is-loading{
            background: red;
        }

    </style>

</head>
<body>
    <div id="root">
        <h1 :class="className">Hello World</h1>
        <button :title="title">Hover over me!</button><br>
        <button :class="{'is-loading':isLoading}" @click="toggleClass()"> Toggle Me</button><br>
        <button :disabled="disabled">Test Button</button>
       
        
    </div>



    <script src="/files/vue.js"></script>
    <script type="text/javascript">
        
        new Vue({
            el:'#root',
            data:{
                title:'fsflsjalat',
                className:'color-red',
                isLoading: false,
                disabled:true
            },
            methods:{

                toggleClass(){
                    this.isLoading = ! this.isLoading;
                }

            }
        });

    </script>
</body>
</html>
