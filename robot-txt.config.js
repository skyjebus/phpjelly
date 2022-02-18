module.exports = {
    destinationPath : "/public",
    policy:
        {
            userAgent: "*",
            disallow: ["/admin"],
            allow: ["/"],
            sitemap: "http://phpjelly.com/sitemap.xml",
            host: "http://phpjelly.com",
        },
};