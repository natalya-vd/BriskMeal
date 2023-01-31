const getListResource = async (endpoint) => {
    return await axios.get(endpoint)
}
const createResource = async ({endpoint, resource}) => {
    return await axios.post(endpoint, resource)
}
const deleteResource = async ({endpoint, id}) => {
    return await axios.delete(`${endpoint}/${id}`)
}
const updateResource = async ({endpoint, id, resource}) => {
    return await axios.put(`${endpoint}/${id}`, resource)
}
const logout = async (endpoint) => {
    return await axios.post(endpoint, '')
}

export { getListResource, createResource, deleteResource, updateResource, logout }
