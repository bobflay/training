<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div id="root">

        <ul>
            <li v-for="name in names">@{{name}}</li>

        </ul>


        <input type="text" v-model="name_input">
        <button @click="addName">Add Name</button>
       
        
    </div>



    <script src="/files/vue.js"></script>
    <script type="text/javascript">
        
        new Vue({
            el:'#root',
            data:{
                names:['bob', 'sam','zack'],
                name_input:''
            },
            mounted(){
                alert('ready');
            },  
            methods:{

                addName(){
                    this.names.push(this.name_input);
                    this.name_input = '';
                }
            }
        });

    </script>
</body>
</html>