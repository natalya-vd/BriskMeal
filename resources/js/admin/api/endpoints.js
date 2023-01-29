const ADMIN_RECIPES = '/api/admin/recipes'
const ADMIN_RECIPES_PHOTO = '/api/admin/recipes/photo'
const ADMIN_RECIPES_FILE = '/api/admin/recipes/file'
const ADMIN_ALLERGENS = '/api/admin/allergens'
const ADMIN_PREFERENCES = '/api/admin/preferences'
const ADMIN_UNITS = '/api/admin/units'
const ADMIN_INGREDIENTS = '/api/admin/ingredients'
const ADMIN_NUTRITION_VALUES = '/api/admin/nutrition-values'
const ADMIN_WEEKS_RECIPES = '/api/admin/weeks/recipes'
const ADMIN_WEEKS = '/api/admin/weeks'

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
    week: {
        index: '/admin/week',
        recipes: '/admin/week/recipes',
    },
}

export {
    ADMIN_RECIPES,
    ADMIN_ALLERGENS,
    ADMIN_PREFERENCES,
    ADMIN_UNITS,
    ADMIN_INGREDIENTS,
    ADMIN_NUTRITION_VALUES,
    ADMIN_WEEKS_RECIPES,
    ADMIN_WEEKS,
    ADMIN_RECIPES_PHOTO,
    ADMIN_RECIPES_FILE,
    routes
}
