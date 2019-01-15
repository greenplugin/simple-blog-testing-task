import UIkit from 'uikit'
import Icons from 'uikit/dist/js/uikit-icons'
import Stackedit from 'stackedit-js'
import axios from 'axios'

UIkit.use(Icons)

const el = document.querySelector('textarea')
const contents = document.querySelector('#content')

if (el && contents) {
  const stackedit = new Stackedit()

  document.querySelector('#content_edit').addEventListener('click', () => {
    stackedit.openFile({
      name: 'content',
      content: {
        text: el.value
      }
    })
  })

  stackedit.on('fileChange', (file) => {
    el.value = file.content.text
    contents.innerHTML = file.content.html
  })
}

const deleteButtons = document.querySelectorAll('.delete')

deleteButtons.forEach((button) => {
  button.addEventListener('click', () => {
    if (window.confirm('Do you really want to delete?')) {
      axios.delete(button.dataset.url)
        .then((response) => {
          location.reload()
        })
        .catch(e => {
          alert(e.message)
        })
    }
  })
})
