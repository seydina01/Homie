  <!-- contact-->
  <div>
        <!-- contact-->
        <div class="w-full flex justify-center lg:mt-24  lg:w-full lg:h-full lg:flex lg:justify-center lg:items-center">
            <div class="w-full m-2 h-screen bg-white rounded-lg flex flex-col justify-center items-center lg:flex lg:flex-row lg:justify-between lg:w-full lg:m-10 lg:h-full lg:gap-10  " style="width:98%; height:35%">
                
                <div class="rounded-lg lg:w-full ">
                    
                    <img src="{{asset('contact.png')}}" class="h-96 w-full lg:w-full lg:h-full " alt="" style="width:80%;height:30% ">
                </div>
                <div class="bg-white sm:border-0 lg:border-2 p-4 border-gray-50 rounded-lg w-80  flex justify-center items-center pl-4 pt-4 pb-8 lg:w-full lg:h-96 lg:block lg:-mt-4 lg:p-20 lg:mr-20 " style="width:40%">
                    <form action="" method="">
                        <input type="text" name="nom" id="nom" placeholder="nom:" class="w-80 rounded-lg outline-none border-green-600 focus:ring-0 mb-4" style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';">
                        <input type="text" name="prenom" id="prenom" placeholder="prenom:" class="w-80 rounded-lg border-green-600 focus:ring-0 mb-4" style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';">
                        <input type="email" name="email" id="email" placeholder="Email:" class="w-80 rounded-lg border-green-600 focus:ring-0 mb-4" style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';">
                        <input type="text" name="objet" id="objet" placeholder="Objet:" class="w-80 rounded-lg border-green-600  focus:ring-0 mb-4" style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';">
                        <textarea name="message" id="message" cols="30" rows="3" placeholder="message:" class="border-green-600 rounded-lg mb-4 focus:border-[#16a34a] focus:ring-0" style="border: 1px solid #ced4da; transition: border-color 0.2s ease-in-out;"onfocus="this.style.borderColor='#16a14a';this.style.outline='none'"onblur="this.style.borderColor='#ced4da';"></textarea>
                        <button class="bg-[#16a34a] w-40 h-10 text-slate-50 rounded-lg lg:mt-8">Prendre rendez-vous</button>
                    </form>
                </div>
            </div>
        </div>
    </div>