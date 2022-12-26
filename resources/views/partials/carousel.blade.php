<div id="app">
    <section  @mouseover="stop()" @mouseleave="start()" >
        <!-- central container -->
            <!-- first jumbo -->
            <Transition>
                <div class="w-100 h-100 first-jumbo-image" v-if="counter == 0">
                    <div class="new-collection-jumbo" >
                        <h1>Toy Factory!</h1>
                        {{-- <p>new collection from newyork</p> --}}
                        <div class="mt-4">
                            <a href="{{route('presents.index')}}" id="btn-submit" class="transp-btn-jumbo my-btn">vai al catalogo</a>
                            {{-- <button class="transp-btn-jumbo">lookbook</button> --}}
                        </div>
                    </div>
                </div>
                <!-- second jumbo -->
                <div class="w-100 h-100 second-jumbo-image" v-else-if="counter == 1">
                    <div class="new-collection-jumbo" >
                        <h1>Toy Factory</h1>
                        {{-- <p>show your products with style</p> --}}
                        <div class="mt-4">
                            <a href="{{route('presents.index')}}" id="btn-submit" class="transp-btn-jumbo my-btn">Vai ai regali</a>
                        </div>
                    </div>
                </div>
                <!-- terzo jumbo -->
                <div class="w-100 h-100 third-jumbo-image" v-else>
                    <div class="new-collection-jumbo" >
                        <h1>Toy Factory</h1>
                        {{-- <p>show your products with style</p> --}}
                        <div class="mt-4">
                            <a href="{{route('presents.index')}}" id="btn-submit" class="transp-btn-jumbo my-btn">Aggiungi un regalo</a>
                        </div>
                    </div>
                </div>
            </Transition>
        <!-- arrows -->
        <div class="left-arrow" @click="scrollLeft()"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="right-arrow" @click="scrollRight()"><i class="fa-solid fa-chevron-right"></i></div>
    </section>
</div>


<script>
const {createApp} = Vue;
const app = createApp({
    data() {
        return {
            counter: 0,
            interval: null
        }
    },
    methods: {
        scrollRight(){
            if(this.counter == 2){
                this.counter = 0
            } else {
                this.counter++
            }
        },
        scrollLeft(){
            if(this.counter > 0){
                this.counter --
            } else {
                this.counter = 2;
            }
        },
        stop(){
            clearInterval(this.interval)
        },
        start(){
            this.interval = setInterval(()=> this.scrollRight(), 3500)
        }
    },
    mounted(){
        this.start()
    }
})

app.mount('#app')
</script>
