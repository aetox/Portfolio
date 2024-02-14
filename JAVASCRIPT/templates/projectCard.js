class ProjectCard {
    constructor(project) {
        this._project = project
    }

    createProjectCard() {
        const $wrapper = document.createElement('div')
        $wrapper.classList.add('project-card-wrapper')

        const projectCard = `

            <div class="project-thumbnail center">

            <a target="_blank" href="${this._project.link}"><img src="${this._project.picture}" alt ="${this._project.title}"></a>
            
            </div>
            <h3 class="fs-16 center"> <a target="_blank" href="${this._project.link}">${this._project.title}</a></h3>
            <p class="fs-14 center">
                <span><strong>Date : </strong>${this._project.date}</span> <br>
                
                <span><strong>Description : </strong>${this._project.description}</span> <br>
            
                <span><strong>Techno : </strong>${this._project.techno}</span>
            </p>
        `

        $wrapper.innerHTML = projectCard
        return $wrapper
    }

}