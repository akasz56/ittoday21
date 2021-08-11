import medpar from '../data/medpar-data.js';

class Medpar extends HTMLElement {
    connectedCallback() {
        this.render();
    }

    render() {
        medpar.forEach((item) => {
            this.innerHTML += `
            <div class="col-sm-4 col-md-3 col-lg-2 my-auto">
                <img src="${item.path}" alt="${item.name}" class="img-fluid p-2" title="${item.name}">
            </div>
            `;
        })
    }
}

customElements.define('my-medpar', Medpar);