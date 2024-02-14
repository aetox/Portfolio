class App {
    constructor() {
        this.$projectWrapper = document.querySelector('.project_gallery')
        this.projectApi = new ProjectApi('data/project.json')
    }

    async main() {
        // Ici je récupère mes films de mon fichier old-movie-data.json
        const projectData = await this.projectApi.getProject()

        projectData
            .map(project => new Project(project))
            .forEach(project => {
                const Template = new ProjectCard(project)
                this.$projectWrapper.appendChild(
                    Template.createProjectCard()
                )
            })
    }
}

const app = new App()
app.main()
