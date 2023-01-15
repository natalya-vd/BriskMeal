import {ADMIN_RECIPES} from './endpoints.js'

const getListRecipes = async () => {
    return await axios.get(ADMIN_RECIPES)
}
const createRecipe = async (recipe) => {
    return await axios.post(ADMIN_RECIPES, recipe)
}
const deleteRecipe = async (id) => {
    return await axios.delete(`${ADMIN_RECIPES}/${id}`)
}
const updateRecipe = async ({id, recipe}) => {
    return await axios.put(`${ADMIN_RECIPES}/${id}`, recipe)
}

export {getListRecipes, createRecipe, deleteRecipe, updateRecipe}
