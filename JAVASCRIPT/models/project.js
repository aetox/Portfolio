class Project {
    constructor(data) {
        this._title = data.title
        this._picture = data.picture
        this._description = data.description
        this._techno = data.techno
        this._date = data.date
        this._link = data.link
    }

    get title() {
        return this._title
    }

    get techno() {
        return this._techno
    }

    get picture() {
        return `assets/Projets/${this._picture}`
    }

    get description() {
        return this._description
    }
    get link() {
        return this._link
    }

    get date() {
        return this._date
    }
}

