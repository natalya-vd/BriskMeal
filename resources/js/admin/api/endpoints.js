const ADMIN_RECIPES = '/api/admin/recipes'
const ADMIN_ALLERGENS = '/api/admin/allergens'
const ADMIN_PREFERENCES = '/api/admin/preferences'
const ADMIN_UNITS = '/api/admin/units'
const ADMIN_INGREDIENTS = '/api/admin/ingredients'

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
    units: {
        index: '/admin/units',
    },
    ingredient: {
        index: '/admin/ingredients',
    },
}

export {
    ADMIN_RECIPES,
    ADMIN_ALLERGENS,
    ADMIN_PREFERENCES,
    ADMIN_UNITS,
    ADMIN_INGREDIENTS,
    routes
}
