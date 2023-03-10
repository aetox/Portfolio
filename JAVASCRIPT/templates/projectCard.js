class ProjectCard {
    constructor(project){
        this._project = project
    }

    createProjectCard(){
        const $wrapper = document.createElement('div')
        $wrapper.classList.add('project-card-wrapper')

        const projectCard = `
            <div class="project-thumbnail center">
                <img
                    alt="${this._project.title}"
                    src="${this._project.picture}"
                />
            </div>
            <h3 class="fs-16 center"> <a target="_blank" href="${this._project.link}">${this._project.title}</a></h3>
            <p class="fs-14 center">
                <span>${this._project.date}</span>
                -
                <span>${this._project.description}</span>
            </p>
        `
        
        $wrapper.innerHTML = projectCard
        return $wrapper
    }

}