<!DOCTYPE html>
<html>
<head>
    <title>Computed Propeperties modified by mazen</title>
</head>
<body>
    <div id="root">
        <h1>
            @{{reversedMessage}}
        </h1>        


        <h1>All Tasks:</h1>

        <ul>
            <li v-for="task in tasks" >@{{task.description}}</li>

        </ul>




        <h1>Incomplete Tasks:</h1>

        <ul>
            <li v-for="task in incompleteTasks" >@{{task.description}}</li>

        </ul>

       
        
    </div>



    <script src="/files/vue.js"></script>
    <script type="text/javascript">
        
        new Vue({
            el:'#root',
            data:{
                message:'Hello World',
                tasks:[
                    {
                        'description':'Go to the store',
                        'completed':true
                    },                    
                    {
                        'description':'Finish Screencast',
                        'completed':false
                    },                    
                    {
                        'description':'Make Donation',
                        'completed':false
                    },                    
                    {
                        'description':'Clear Inbox',
                        'completed':false
                    },                    
                    {
                        'description':'Make Dinner',
                        'completed':false
                    },
                    {
                        'description':'Clean Room',
                        'completed':true
                    },

                ]
            },
            computed:{
                reversedMessage(){
                    return this.message.split('').reverse().join('');
                },

                incompleteTasks(){
                    return this.tasks.filter(task => !task.completed);
                }
            }
        });

    </script>
</body>
</html>
