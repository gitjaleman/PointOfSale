const http_data = "http://localhost/server/portrans_api/api/";
const FETCH_GET = async (url,get_process) => {
  try {
    const resp = await fetch(http_data+url);
    const data = await resp.json();
    await PROCESS_GET(data,get_process);
  } catch (e) {
    console.log('Error: '+get_process+ ' - msj:'+e);
  }
};

const FETCH_POST = async (url,post_process,formData) => {
  try {
    const resp = await fetch(http_data+url, {
      method: 'POST',
      body: formData
    });
    const data = await resp.json();
    await PROCESS_POST(data,post_process);
  } catch (e) {
    console.log("no hay resultados:" + e);
  }
};