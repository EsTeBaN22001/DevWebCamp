(function(){

  const tagsInput = document.querySelector('#tags_input')

  if(tagsInput){

    let tags = []

    const tagsDiv = document.querySelector('#tags')
    const tagsInputHidden = document.querySelector('[name="tags"]')

    tagsInput.addEventListener('keypress', guardarTag)

    function guardarTag(e){

      if(e.keyCode == 44){
        
        e.preventDefault()

        if(e.target.value.trim() === '' || e.target.value < 1){
          return
        }
        
        tags = [...tags, e.target.value.trim()]

        tagsInput.value = ''

        mostrarTags()

      }

    }

    function mostrarTags(){

      tagsDiv.textContent = ''
      
      tags.forEach( tag => {

        const etiqueta = document.createElement('LI')
        etiqueta.classList.add('formulario__tag')
        etiqueta.textContent = tag
        etiqueta.ondblclick = eliminarTag
        tagsDiv.appendChild(etiqueta)

      })

      actualizarInputHidden()

    }
    
    function eliminarTag(e){
     
      e.target.remove()
      tags = tags.filter(tag => tag !== e.target.textContent)
      actualizarInputHidden()

    }

    function actualizarInputHidden(){
      tagsInputHidden.value = tags.toString()
    }

  }

})()