Vue.component('modal',{

	props:[],
	data(){
		return {
		}
	},
	template:`


		<div class="modal is-active">
		  <div class="modal-background"></div>
		  <div class="modal-content">
		  		<div class="box">
		  			<p>
			  			<slot></slot>
		  			</p>
		  			
		  		</div>

		  </div>
		  <button class="modal-close is-large" aria-label="close" @click="$emit('close')"></button>
		</div>




		`,
	methods:{
	}


});





new Vue({
	el:'#root',
	data:{
		showModal:false
	}

});