const ADMIN_RECIPES = '/api/admin/recipes'
const ADMIN_ALLERGENS = '/api/admin/allergens'
const ADMIN_PREFERENCES = '/api/admin/preferences'

const routes = {
    recipe: {
        index: '/admin/recipes'
    },
    allergen: {
        index: '/admin/allergens',
    },
    preferences: {
        index: '/admin/preferences',
    },
}

export {ADMIN_RECIPES, ADMIN_ALLERGENS, ADMIN_PREFERENCES, routes}
