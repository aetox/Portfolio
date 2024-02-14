class Api {
    /**
     * @param {string} url 
     */
    constructor(url) {
        this._url = url;
    }

    async get() {
        try {
            const response = await fetch(this._url);
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            const data = await response.json();
            // Check if data is an array
            if (!Array.isArray(data)) {
                throw new Error('Data is not an array');
            }
            return data;
        } catch (err) {
            console.log('An error occurred:', err);
            throw err;
        }
    }
}

class ProjectApi extends Api {
    /**
     * @param {string} url 
     */
    constructor(url) {
        super(url);
    }

    async getProject() {
        try {
            return await this.get();
        } catch (err) {
            // Gérer l'erreur spécifique à ce niveau si nécessaire
            console.log('Error in getting project:', err);
            throw err;
        }
    }
}
