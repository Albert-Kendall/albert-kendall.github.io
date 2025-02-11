export default function (eleventyConfig) {
  eleventyConfig.addPassthroughCopy({
    'css': 'css',
    'img': 'img',
  });
  eleventyConfig.addGlobalData('site_title', 'Albert & Kendall');
  eleventyConfig.setIncludesDirectory('_includes');
  eleventyConfig.setLayoutsDirectory('_layouts');
  eleventyConfig.addGlobalData('layout', 'default.liquid');
};
