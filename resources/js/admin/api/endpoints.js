const ADMIN_RECIPES = '/api/admin/recipes'
const ADMIN_ALLERGENS = '/api/admin/allergens'
const ADMIN_PREFERENCES = '/api/admin/preferences'
const ADMIN_UNITS = '/api/admin/units'
const ADMIN_INGREDIENTS = '/api/admin/ingredients'
const ADMIN_NUTRITION_VALUES = '/api/admin/nutrition-values'

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
    nutritionValue: {
        index: '/admin/nutrition-values',
    },
}

export {
    ADMIN_RECIPES,
    ADMIN_ALLERGENS,
    ADMIN_PREFERENCES,
    ADMIN_UNITS,
    ADMIN_INGREDIENTS,
    ADMIN_NUTRITION_VALUES,
    routes
}
