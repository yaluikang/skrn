class AjaxBuilder extends Site
{
    constructor( url, method )
    {
        super();
        this.url = url;
        this.method = method;
        this.json = 'Нет данных';
        this.getParameters = {};
    }

    getGetParameters()
    {
        return this.getParameters;
    }

    getUrl()
    {
        return this.url;
    }

    getMethod()
    {
        return this.method;
    }

    setUrl( url )
    {
        this.url = url;
        return this;
    }

    setMethod( method )
    {
        this.method = method;
        return this;
    }

    setGetParameter( key, name )
    {
        this.getParameters[key] = name;
    }

    deleteGetParameter( key )
    {
        delete this.getParameters[key];
    }

    checkGetParameterGenre()
    {
        if( this.getParameters['genre'] )
        {
            this.deleteGetParameter('genre');
        }
    }

    setGetParametersToUrl()
    {
        let $str;
        let $getParameters = this.getGetParameters();
        console.log( $getParameters );
        let $counter = 0;
        for( let $key in $getParameters )
        {
            if( $counter == 0 )
            {
                $str = '?' + $key + '=' + $getParameters[$key];
            } else {
                $str = $str + '&' + $key + '=' + $getParameters[$key];
            }
            $counter++;
        }
        if( $str )
        {
            this.url += $str;
        }
    }

    ajaxRequest()
    {
        let $json;
        this.setGetParametersToUrl();
        console.log( this.url );
        $.ajax({
            method: this.getMethod(),
            url: this.getUrl(),
            async: false,
            success: function( data )
            {
                $json = data;
            }
        });
        this.json = $json;
        this.controllerOfActions();
    }

    controllerOfActions()
    {
        if( this.getUrl() == 'http://lukankin.ru/setnewcookies' && this.json )
        {
            this.json = JSON.parse( this.json );
            for( let $i = 0; $i < this.json.length; $i++ )
            {
                this.json[$i] = Number( this.json[$i] );
            }
            this.json = JSON.stringify( this.json );
            Cookies.set( 'added', this.json, { expires: 1, path: '/' });
        } else if( !this.json )
        {
            return;
        } else if( this.getUrl() == 'http://lukankin.ru/getbookmarks')
        {
            this.addBookmarks( this.json, '#bookmarks' );
        }
        else
        {
            if( $.parseJSON( this.json ).length < 1 )
            {
                console.log( 'nothing' );
                this.nothing();
            } else {
                console.log( 'something' );
                this.addMovies( this.json, '#colorposter' );
            }
        }
        /*}*/
    }

}