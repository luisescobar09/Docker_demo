import web

render = web.template.render("index/")
render_docker = web.template.render("docker/")
render_ubuntu = web.template.render("ubuntu/")

urls = (
    '/', 'Index',
    '/docker', 'Docker',
    '/ubuntu', 'Ubuntu'
)
app = web.application(urls, globals())

class Index:
    def GET(self):
        return render.index()

class Docker:
    def GET(self):
        return render_docker.index()
        
class Ubuntu:
    def GET(self):
        return render_ubuntu.index()
        
web.webapi.internalerror = web.debugerror
if __name__ == "__main__":
    app.run()
